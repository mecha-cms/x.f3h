import {
    B,
    D,
    R,
    W,
    getAttributes,
    getClasses,
    getElements,
    getHTML,
    letClasses,
    setAttributes,
    setHTML,
    theScript
} from '@taufik-nurrohman/document';

import F3H from '@taufik-nurrohman/f3h';

import {
    fromJSON,
    fromQuery
} from '@taufik-nurrohman/from';

import {
    isSet
} from '@taufik-nurrohman/is';

import {
    toCount
} from '@taufik-nurrohman/to';

const q = fromQuery(theScript.src.split('?')[1] || "");

const f3h = new F3H(q.state);
const elements = getElements(q.of);

if (toCount(elements)) {
    let noJSClasses = [
        'no-js',
        'nojs'
    ];
    f3h.on('exit', function () {
        D.title = 'Loading\u{2026}';
    });
    f3h.on('success', function (response) {
        if (!response) {
            return;
        }
        let r = response.documentElement,
            type = this.lot['content-type'];
        if ('text/html' !== type.split(';')[0]) {
            return;
        }
        D.title = response.title || "";
        r && setAttributes(R, getAttributes(r, false));
        // Check for `no-js` class and the like in `<body>` and `<html>` element, then remove it!
        letClasses(B, noJSClasses);
        letClasses(R, noJSClasses);
        const responseElements = getElements(q.of, response);
        elements.forEach((element, index) => {
            if (isSet(responseElements[index])) {
                setAttributes(element, getAttributes(responseElements[index], false));
                setHTML(element, getHTML(responseElements[index]));
            }
        });
    });
}

W.F3H = F3H;
function parseQueryString(query) {
    query = query.replace(/^\?/, '');

    if (query === '') {
        return {};
    }

    const result = {};

    for (const pair of query.split('&')) {
        if (pair === '') {
            continue;
        }

        const equalsPos = pair.indexOf('=');

        if (equalsPos === -1) {
            result[decodePlus(pair)] = '';
        } else {
            result[decodePlus(pair.slice(0, equalsPos))] = decodePlus(pair.slice(equalsPos + 1));
        }
    }

    return result;
}

function decodePlus(str) {
    return decodeURIComponent(str.replace(/\+/g, ' '));
}

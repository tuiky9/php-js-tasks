class Solution {
    static solution(query) {
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
                result[Solution.decodePlus(pair)] = '';
            } else {
                result[Solution.decodePlus(pair.slice(0, equalsPos))] = Solution.decodePlus(pair.slice(equalsPos + 1));
            }
        }

        return result;
    }

    static decodePlus(str) {
        return decodeURIComponent(str.replace(/\+/g, ' '));
    }
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

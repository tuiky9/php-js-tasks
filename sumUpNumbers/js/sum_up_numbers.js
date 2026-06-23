class Solution {
    static solution(inputString) {
    if (!inputString.match(/[\d]+/g)) {
        return 0;
    }
    return inputString.match(/[\d]+/g).reduce((a, v) => Number(a) + Number(v), 0);
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

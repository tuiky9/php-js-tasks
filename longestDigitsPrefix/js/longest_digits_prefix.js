class Solution {
    static solution(inputString) {
    return inputString.match(/^\d*/)[0];
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

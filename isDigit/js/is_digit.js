class Solution {
    static solution(symbol) {
    return (parseInt(symbol) || parseInt(symbol) === 0) ? true : false;
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

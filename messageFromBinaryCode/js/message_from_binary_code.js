class Solution {
    static solution(code) {
    return code.match(/.{1,8}/g).reduce((a, v) => a += String.fromCharCode(parseInt(v, 2).toString(10)), '')
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

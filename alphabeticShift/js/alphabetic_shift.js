class Solution {
    static solution(inputString) {
    return inputString.split('').map((v, i) => String.fromCharCode(v.charCodeAt(0)+1).replace('{', 'a')).join('');

}}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

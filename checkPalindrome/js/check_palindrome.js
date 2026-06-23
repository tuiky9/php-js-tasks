class Solution {
    static solution(inputString) {
return inputString === inputString.split('').reverse().join('');
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

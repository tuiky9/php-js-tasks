class Solution {
    static solution(inputArray) {
    const max = inputArray.reduce((a, v) => a < v.length ? a = v.length : a, 0);
    return inputArray.filter((v) => v.length === max);
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

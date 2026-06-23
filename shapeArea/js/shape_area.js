class Solution {
    static solution(n) {
    const nOuterQubes = n * n;
    const innerLine = n - 1;
    const nInnerQubes = innerLine * innerLine;
    return nOuterQubes + nInnerQubes;
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

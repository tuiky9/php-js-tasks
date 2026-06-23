class Solution {
    static solution(bishop, pawn) {
    return Math.abs(bishop[0].charCodeAt(0) - pawn[0].charCodeAt(0)) == Math.abs(Number(bishop[1]) - Number(pawn[1]));
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

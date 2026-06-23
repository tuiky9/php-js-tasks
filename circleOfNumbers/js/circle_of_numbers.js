class Solution {
    static solution(n, firstNumber) {
let opp = n / 2 + firstNumber;
    return opp >= n ? opp - n : opp;
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

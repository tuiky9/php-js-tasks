class Solution {
    static solution(s) {
    if (s.length <= 1) {
        return s;
    }

    return s[0] + s[s.length - 1] + solve(s.slice(1, -1));
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

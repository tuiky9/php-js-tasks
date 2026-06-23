class Solution {
    static solution(s) {
    return s.split('').filter((v, i, a) => {
        if (a.slice(0, i).includes(v)) {
            return false;
        } else {
            return true;
        }
    }).length;
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

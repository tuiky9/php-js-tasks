class Solution {
    static solution(time) {
    let t = time.split(':');
    return Number(t[0]) < 24 && Number(t[1]) < 60;
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

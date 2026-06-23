class Solution {
    static solution(n) {
    
return n.toString().split('').reduce((a, v) => (a += parseInt(v) % 2 !=  0),0) === 0;
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

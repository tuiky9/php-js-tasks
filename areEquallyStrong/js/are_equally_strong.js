class Solution {
    static solution(yourLeft, yourRight, friendsLeft, friendsRight) {
return [yourLeft, yourRight].sort().join('') === [friendsLeft, friendsRight].sort().join('');
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

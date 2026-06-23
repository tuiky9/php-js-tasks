class Solution {
    static solution(address) {
    return address.split('@').pop();

}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

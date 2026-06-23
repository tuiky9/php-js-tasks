class Solution {
    static solution(inputString) {
let ip = inputString.split('.');

return ip.filter((e)=>{return e.match(/\D/g) || e > 255 || parseInt(e) != e;}).length == 0 && ip.length === 4;

}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

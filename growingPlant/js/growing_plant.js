class Solution {
    static solution(upSpeed, downSpeed, desiredHeight) {

    let days = Math.round(desiredHeight / (upSpeed - downSpeed));
    let a = 0;
    for (let i = 1; i <=days; i++){
        a += upSpeed - downSpeed;
        if(a+downSpeed >= desiredHeight || a >= desiredHeight){
            return i;
        }

    }
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

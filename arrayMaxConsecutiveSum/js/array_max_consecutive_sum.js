class Solution {
    static solution(inputArray, k) {
    let sum = 0;
    let j = k;
    while (j--) {
        sum += inputArray[j];
    }
    let maxsum = sum;
    for (var i = 1; i <= inputArray.length - k; i++) {
        sum = sum - inputArray[i - 1] + inputArray[i + k - 1];
        if (sum > maxsum) {
            maxsum = sum;
        }
    }
    return maxsum;
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

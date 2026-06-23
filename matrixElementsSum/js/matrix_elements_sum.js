class Solution {
    static solution(matrix) {
    const index = [];
    let sum = 0;

    for (let i = 0; i < matrix.length; i++) {
        for (let k = 0; k < matrix[i].length; k++) {
            const v = matrix[i][k];
            if (!index.includes(k)) {
                sum += v;
            }
            if (v === 0) {
                index.push(k);
            }
        }
    }

    return sum;
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

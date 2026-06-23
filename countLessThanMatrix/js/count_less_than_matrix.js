class Solution {
    static solution(matrix, target) {
        const rows = matrix.length;

        if (rows === 0) {
            return 0;
        }

        const cols = matrix[0].length;

        if (cols === 0) {
            return 0;
        }

        let count = 0;
        let row = rows - 1;
        let col = 0;

        while (row >= 0 && col < cols) {
            if (matrix[row][col] < target) {
                count += row + 1;
                col++;
            } else {
                row--;
            }
        }

        return count;
    }
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

class Solution {
    static solution(grid) {
        const n = grid.length;

        if (n === 0) {
            return [null, null];
        }

        let min = grid[0][n - 1];
        let max = grid[0][n - 1];

        for (let row = 0; row < n; row++) {
            const col = n - 1 - row;
            const value = grid[row][col];

            if (value < min) {
                min = value;
            }

            if (value > max) {
                max = value;
            }
        }

        return [min, max];
    }
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}

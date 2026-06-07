function countLessThan(matrix, target) {
    const rows = matrix.length;

    if (rows === 0) {
        return 0;
    }

    const cols = matrix[0].length;

    if (cols === 0) {
        return 0;
    }

    let count = 0;

    // Start from bottom-left corner
    let row = rows - 1;
    let col = 0;

    while (row >= 0 && col < cols) {
        if (matrix[row][col] < target) {
            // If matrix[row][col] is smaller than target,
            // then all values above it in the same column are also smaller
            count += row + 1;

            // Move right to check larger values
            col++;
        } else {
            // Current value is too large or equal to target,
            // move up to smaller values
            row--;
        }
    }

    return count;
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { countLessThan };
}

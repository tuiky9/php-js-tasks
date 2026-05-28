function isToeplitzMatrix(matrix) {
    const maxRows = matrix.length;
    const maxCols = matrix[0].length;

    const isDiagonalConstant = (row, column) => {
        if (row + 1 >= maxRows || column + 1 >= maxCols) {
            return true;
        }

        if (matrix[row][column] !== matrix[row + 1][column + 1]) {
            return false;
        }

        return isDiagonalConstant(row + 1, column + 1);
    };

    for (let column = 0; column < maxCols; column++) {
        if (!isDiagonalConstant(0, column)) {
            return false;
        }
    }

    for (let row = 0; row < maxRows; row++) {
        if (!isDiagonalConstant(row, 0)) {
            return false;
        }
    }

    return true;
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { isToeplitzMatrix };
}

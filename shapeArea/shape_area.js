function shapeArea(n) {
    const nOuterQubes = n * n;
    const innerLine = n - 1;
    const nInnerQubes = innerLine * innerLine;
    return nOuterQubes + nInnerQubes;
}

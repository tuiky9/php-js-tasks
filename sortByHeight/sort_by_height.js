function sortByHeight(a) {
    const s = a.filter((v) => v != -1).sort((x, y) => x - y);

    return a.map((v) => (v === -1 ? -1 : s.shift()));
}

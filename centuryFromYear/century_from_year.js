function centuryFromYear(year) {
    const fourDigitYear = String(year).padStart(4, '0');
    const century = [fourDigitYear.slice(0, 2), fourDigitYear.slice(2, 4)];
    const centuryStart = century[1] != '00' ? 1 : 0;
    return Number(century[0]) + centuryStart;
}

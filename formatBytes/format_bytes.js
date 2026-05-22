function formatBytes(bytes) {
    if (bytes < 1024) {
        return bytes + ' B';
    }

    const units = ['KB', 'MB', 'GB'];
    let value = bytes;

    for (const unit of units) {
        value /= 1024;

        if (value < 1024 || unit === 'GB') {
            return value.toFixed(1) + ' ' + unit;
        }
    }

    return value.toFixed(1) + ' GB';
}

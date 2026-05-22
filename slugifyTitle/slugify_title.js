function slugifyTitle(title) {
    let slug = title.toLowerCase();
    slug = slug.replace(/[^a-z0-9]+/g, '-');
    return slug.replace(/^-+|-+$/g, '');
}

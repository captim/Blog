function copyToClipboard(copyText) {
    navigator.clipboard.writeText(copyText);
    alert("Copied to clipboard: " + copyText);
}

const textarea = document.getElementById('textarea')
moveCursorToEnd()

function moveCursorToEnd() {
  const len = textarea.value.length;
  textarea.focus();
  textarea.setSelectionRange(len, len);

  textarea.scrollTop = textarea.scrollHeight
}

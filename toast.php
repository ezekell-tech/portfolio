<div id="toast"></div>

<style>
#toast{
    position: fixed !important;
    top: 20px !important;
    right: 20px !important;

    width: auto !important;
    max-width: 320px !important;
    min-width: 150px !important;
    height: auto !important;
    min-height: auto !important;
    max-height: 100px !important;

    padding: 12px 18px !important;

    border-radius: 8px !important;

    display: inline-block !important;

    white-space: normal !important;
    word-break: break-word !important;
    overflow: hidden !important;

    font-size: 14px !important;
    line-height: 1.5 !important;

    z-index: 999999 !important;

    opacity: 0;
    transform: translateY(-10px);
    transition: .3s ease;
}

#toast.show {
    opacity: 1;
    transform: translateY(0);
}

#toast.success {
    background: #16a34a;
}

#toast.error {
    background: #dc2626;
}

#toast.warning {
    background: #f59e0b;
}

#toast.info {
    background: #2563eb;
}

#toast{
    height: auto !important;
    width: auto !important;
}

</style>

<script>
function showToast(message, type = "info") {
  const toast = document.getElementById("toast");

  if (!toast) return;

  toast.className = "";
  toast.classList.add("show", type);
  toast.textContent = message;

  setTimeout(() => {
    toast.classList.remove("show");
  }, 3000);
}
</script>
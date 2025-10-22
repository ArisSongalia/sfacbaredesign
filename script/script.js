<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

document.addEventListener('DOMContentLoaded', () => {
  const imageModal = document.getElementById('imageModal');
  if (imageModal) {
    imageModal.addEventListener('show.bs.modal', event => {
      const button = event.relatedTarget;
      const imageSrc = button.getAttribute('data-bs-image');
      const modalImage = imageModal.querySelector('#modalImage');
      modalImage.src = imageSrc;
    });
  }
});

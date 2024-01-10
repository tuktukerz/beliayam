document.addEventListener('DOMContentLoaded', function() {

  // only showing on the first time the website has opened
  const isFirstTime = sessionStorage.getItem('modal') == null;
  console.log(isFirstTime)
  
  // set the modal menu element
  const $targetEl = document.getElementById("modal-ad");

  // options with default values
  const options = {
      placement: "center",
      backdrop: "dynamic",
      backdropClasses: "bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40",
      closable: true,
      onHide: () => {
          // console.log("modal is hidden");
      },
      onShow: () => {
          // console.log("modal is shown");
      },
      onToggle: () => {
          // console.log("modal has been toggled");
      },
  };

  // instance options object
  const instanceOptions = {
      id: "modal-ad",
      override: true,
  };

  const modal = new Modal($targetEl, options, instanceOptions);

  if (isFirstTime) {
    modal.show();
    sessionStorage.setItem('modal', 1)
  }
});
export const renderAlert = (message: string, typeMessage: string, ref: string, hidden: boolean = true) => {
  const previusAlert = document.querySelector(".alert");
  if (previusAlert) {
    previusAlert.remove();
  }

  const divAlert = document.createElement("div");
  divAlert.textContent = message;
  divAlert.classList.add('text-white', 'font-bold', 'w-full', 'text-center', 'rounded', 'py-2', 'alert');
  divAlert.style.backgroundColor = typeMessage === "error" ? "#e53e3e" : "#38a169";
  divAlert.style.marginTop = '1rem';

  const divFormulacio = document.querySelector(ref);
  divFormulacio!.appendChild(divAlert);

  if (hidden) {
    setTimeout(() => {
      divAlert.remove();
    }, 3000);
  }
}
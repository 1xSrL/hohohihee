(() => {
  'use strict'

  const getStoredTheme = () => localStorage.getItem('theme')
  const setStoredTheme = theme => localStorage.setItem('theme', theme)

  const getPreferredTheme = () => {
    const storedTheme = getStoredTheme()
    if (storedTheme) {
      return storedTheme
    }

    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
  }


  const setTheme = theme => {
    if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      document.documentElement.setAttribute('data-bs-theme', 'dark')
    } else {
      document.documentElement.setAttribute('data-bs-theme', theme)
    }
  }

  setTheme(getPreferredTheme())

  const showActiveTheme = (theme, focus = false) => {
    const themeSwitcher = document.querySelector('#bd-theme')

    if (!themeSwitcher) {
      return
    }

    const themeSwitcherText = document.querySelector('#bd-theme-text')
    const activeThemeIcon = document.querySelector('.theme-icon-active use')
    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
    const svgOfActiveBtn = btnToActive.querySelector('svg use').getAttribute('href')

    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
      element.classList.remove('active')
      element.setAttribute('aria-pressed', 'false')
    })

    btnToActive.classList.add('active')
    btnToActive.setAttribute('aria-pressed', 'true')
    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
    const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`
    themeSwitcher.setAttribute('aria-label', themeSwitcherLabel)

    if (focus) {
      themeSwitcher.focus()
    }
  }

  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
    const storedTheme = getStoredTheme()
    if (storedTheme !== 'light' && storedTheme !== 'dark') {
      setTheme(getPreferredTheme())
    }
  })

  window.addEventListener('DOMContentLoaded', () => {
    showActiveTheme(getPreferredTheme())

    document.querySelectorAll('[data-bs-theme-value]')
      .forEach(toggle => {
        toggle.addEventListener('click', () => {
          const theme = toggle.getAttribute('data-bs-theme-value')
          setStoredTheme(theme)
          setTheme(theme)
          showActiveTheme(theme, true)
        })
      })
  })
})()
let following = false;
let grayscaleCount = 0;

function toggleFollow() {
  const followButton = document.getElementById("followButton");
  const companyImage = document.querySelector(".company-image");

  if (following) {
    followButton.textContent = "Follow";
    companyImage.style.filter = "grayscale(0)";
  } else {
    followButton.textContent = "Following";
    grayscaleCount = 0;
    grayscaleCompanyImage();
  }

  following = !following;
}

function grayscaleCompanyImage() {
  const companyImage = document.querySelector(".company-image");
  if (grayscaleCount < 5) {
    companyImage.style.filter = "grayscale(1)";
    grayscaleCount++;

    setTimeout(grayscaleCompanyImage, 1000);
  } else {
    companyImage.style.filter = "grayscale(0)";
}
  let following = false;
  let grayscaleCount = 0;

  function toggleFollow() {
    const followButton = document.getElementById("followButton");
    if (following) {
      followButton.textContent = "Follow";
    } else {
      followButton.textContent = "Following";
    }
    following = !following;

    // Check if "Follow" button was clicked and perform grayscale effect
    if (!following) {
      grayscaleContent();
    }
  }

  function grayscaleContent() {
    // Check if the grayscaleCount is less than 5 and apply grayscale effect
    if (grayscaleCount < 5) {
      const content = document.getElementById("content");
      content.classList.add("grayscale-effect");
      grayscaleCount++;
    } else {
      grayscaleCount = 0; // Reset the count after 5 grayscale toggles
      const content = document.getElementById("content");
      content.classList.remove("grayscale-effect");
    }
  }

  const followButton = document.getElementById("follow-button");
  followButton.addEventListener("click", toggleFollow);
}

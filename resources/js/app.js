import './bootstrap';

// Import our custom CSS
import '~resources/scss/app.scss'

import * as bootstrap from 'bootstrap'

import '~bootstrap/js/index.esm.js'

//precompilazione immagini
import.meta.glob([
    '../img/**'
])

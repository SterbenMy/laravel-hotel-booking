<template>
    <transition name="modal">
        <div class="modal">
            <div class="modal__mask"></div>
            <div class="modal__wrapper">
                <div class="modal__container">
                    <div class="modal__header">
                        <slot name="header"></slot>
                        <div class="modal__x" @click="$emit('toggle')">&times;</div>
                    </div>
                    <div class="modal__body">
                        <slot name="body"></slot>
                    </div>
                    <div class="modal__footer">
                        <slot name="footer"></slot>
                    </div>
                </div>
            </div>
        </div>
    </transition>
</template>

<script>
export default {
    name: "Modal",
    data() {
        return {
            showModal: false
        }
    },
}
</script>

<style scoped>
.modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.modal__wrapper {
    position: relative;
    width: 65vmin;
    min-height: 35vmin;
    background: #fff;
    color: #333;
    display: flex;
    border-radius: 0.2em;
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2), 0 1em 2em -1em;
}
.modal__container {
    flex: 1;
    display: flex;
    flex-direction: column;
}
.modal__header {
    display: flex;
    justify-content: space-between;
    padding: 1em;
}
.modal__body {
    flex: 1;
    padding: 1em;
    overflow: auto;
}
.modal__footer {
    padding: 1em;
    text-align: right;
}
.modal__x {
    cursor: pointer;
}

.modal-enter-active,
.modal-leave-active {
    transition: opacity 0.5s;
}

.modal-enter,
.modal-leave-to {
    opacity: 0;
}

[v-cloak] {
    display: none !important;
}

*,
*::before,
*::after {
    box-sizing: border-box;
}

body {
    margin: 0;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: sans-serif;
    background: #9ccf5e;
    color: #fff;
}

button {
    border: 1px solid;
    padding: 0.7em 1em;
    border-radius: 0.35em;
    color: inherit;
    font: inherit;
    background: rgba(0, 0, 0, 0.3);
    outline: none;
    will-change: transform;
    transition: transform 0.2s ease-out;
}
button:active {
    transform: scale(0.9);
}

input[type=checkbox] {
    display: inline-block;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    position: relative;
    color: inherit;
    background: rgba(0, 0, 0, 0.1);
    padding: 1em 2em;
    border: 1px solid;
    border-radius: 1em;
    font-size: 0.8em;
    font-family: inherit;
    cursor: pointer;
    outline: 0;
    vertical-align: middle;
    margin: -0.5em 0;
    will-change: transform, background;
    transition: background 0.3s ease-out, transform 0.2s ease-out;
}
input[type=checkbox]:active {
    transform: scale(0.9);
}
input[type=checkbox]::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-100%, -50%) scale(0.8);
    background: white;
    padding: 1em;
    border-radius: 1em;
    transition: transform 0.3s ease-out;
}
input[type=checkbox]:checked {
    background: rgba(0, 0, 0, 0.3);
}
input[type=checkbox]:checked::before {
    transform: translate(0%, -50%) scale(0.8);
}
</style>

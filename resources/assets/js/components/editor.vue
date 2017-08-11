<template>
    <div id="editor">
        <textarea :value="input"></textarea>
        <div v-html="compiledMarkdown"></div>
    </div>
</template>

<script>
    export default {
        data: {
            input: '# hello'
        },
        computed: {
            compiledMarkdown: function () {
                return marked(this.input, { sanitize: true })
            }
        },
        watch: {
            input: function() {
                this.input = e.target.value
            }
        }
    }
</script>

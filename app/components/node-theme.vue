<template>

    <div class="uk-form-horizontal">

        <template v-if="node.type === 'page'">
            <div class="uk-form-row">
                <span class="uk-form-label">{{ 'Title' | trans }}</span>
                <div class="uk-form-controls uk-form-controls-text">
                    <label><input type="checkbox" v-model="node.theme.title_hide"> {{ 'Hide Title' | trans }}</label>
                </div>
            </div>

            <div class="uk-form-row">
                <span class="uk-form-label">{{ 'Title Size' | trans }}</span>
                <div class="uk-form-controls uk-form-controls-text">
                    <label><input type="checkbox" v-model="node.theme.title_large"> {{ 'Extra large title.' | trans }}</label>
                </div>
            </div>

            <div class="uk-form-row">
                <span class="uk-form-label">{{ 'Alignment' | trans }}</span>
                <div class="uk-form-controls uk-form-controls-text">
                    <label><input type="checkbox" v-model="node.theme.alignment"> {{ 'Center the title and content.' | trans }}</label>
                </div>
            </div>
        </template>

        <div class="uk-form-row">
            <label for="form-class" class="uk-form-label">{{ 'HTML Class' | trans }}</label>
            <div class="uk-form-controls">
                <input id="form-class" class="uk-form-width-large" type="text" v-model="node.theme.html_class">
            </div>
        </div>

        <div class="uk-form-row">
            <span class="uk-form-label">{{ 'Sidebar' | trans }}</span>
            <div class="uk-form-controls uk-form-controls-text">
                <label><input type="checkbox" v-model="node.theme.sidebar_first"> {{ 'Show the sidebar before the content.' | trans }}</label>
            </div>
        </div>

        <div class="uk-form-row">
            <label for="form-top-style" class="uk-form-label">Login {{ 'Position' | trans }}</label>
            <div class="uk-form-controls">
                <select id="form-login-style" class="uk-form-width-large" v-model="node.theme.login_style">
                    <option value="uk-block-default">{{ 'Default' | trans }}</option>
                    <option value="uk-block-muted">{{ 'Muted' | trans }}</option>
                </select>
            </div>
        </div>


        <div class="uk-form-row">
            <label for="form-top-style" class="uk-form-label">Top {{ 'Position' | trans }}</label>
            <div class="uk-form-controls">
                <select id="form-top-style" class="uk-form-width-large" v-model="node.theme.top_style">
                    <option value="uk-block-default">{{ 'Default' | trans }}</option>
                    <option value="uk-block-muted">{{ 'Muted' | trans }}</option>
                </select>
            </div>
        </div>

        <div class="uk-form-row">
            <label for="form-main-style" class="uk-form-label">Main {{ 'Position' | trans }}</label>
            <div class="uk-form-controls">
                <select id="form-main-style" class="uk-form-width-large" v-model="node.theme.main_style">
                    <option value="uk-block-default">{{ 'Default' | trans }}</option>
                    <option value="uk-block-muted">{{ 'Muted' | trans }}</option>
                </select>
            </div>
        </div>

        <div class="uk-form-row">
            <label for="form-bottom-style" class="uk-form-label">Bottom {{ 'Position' | trans }}</label>
            <div class="uk-form-controls">
                <select id="form-bottom-style" class="uk-form-width-large" v-model="node.theme.bottom_style">
                    <option value="uk-block-default">{{ 'Default' | trans }}</option>
                    <option value="uk-block-muted">{{ 'Muted' | trans }}</option>
                </select>
            </div>
        </div>

        <div class="uk-form-row">
            <label for="form-footer-style" class="uk-form-label">Footer {{ 'Position' | trans }}</label>
            <div class="uk-form-controls">
                <select id="form-footer-style" class="uk-form-width-large" v-model="node.theme.footer_style">
                    <option value="uk-block-default">{{ 'Default' | trans }}</option>
                    <option value="uk-block-muted">{{ 'Muted' | trans }}</option>
                </select>
                <p class="uk-form-help-block uk-margin">{{ 'Note: Position settings only work if you publish a widget in that position.' | trans }}</p>
            </div>
        </div>

    </div>

</template>

<script>

    module.exports = {

        section: {
            label: 'Theme',
            priority: 90
        },

        props: ['node']

    };

    window.Site.components['node-theme'] = module.exports;

</script>

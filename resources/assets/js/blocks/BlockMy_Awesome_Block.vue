<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-textfield label="product" :name="fieldName('Product name')" type="text" :required="true" placeholder="Product Name ..." :maxlength="200" in-store="value" ></a17-textfield><a17-locale type="a17-textfield" :attributes="{ label: 'Image Subtitle (translated)', name: fieldName('image_subtitle'), type: 'textarea', required: true, placeholder: 'Description.', maxlength: 250, inStore: 'value' }" ></a17-locale><a17-singleselect label="Category of product" :name="fieldName('Category')" :options='[{&quot;value&quot;:&quot;arts&quot;,&quot;label&quot;:&quot;Arts &amp; Culture&quot;},{&quot;value&quot;:&quot;finance&quot;,&quot;label&quot;:&quot;Banking &amp; Finance&quot;},{&quot;value&quot;:&quot;civic&quot;,&quot;label&quot;:&quot;Civic &amp; Public&quot;},{&quot;value&quot;:&quot;design&quot;,&quot;label&quot;:&quot;Design &amp; Architecture&quot;},{&quot;value&quot;:&quot;education&quot;,&quot;label&quot;:&quot;Education&quot;},{&quot;value&quot;:&quot;entertainment&quot;,&quot;label&quot;:&quot;Entertainment&quot;}]' :has-default-store="true" in-store="value" > </a17-singleselect>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>

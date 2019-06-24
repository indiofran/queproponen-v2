<template>
	<nav>
		<div class="nav-wrapper">
			<router-link :to="{name: 'Index'}" class="brand-logo" v-if="$route.name != 'Index' ">Que Proponen</router-link>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><router-link :to="{name:'Team'}">¿Quienes Somos?</router-link></li>
				<li><router-link :to="{name:'Padron'}">¿Donde Voto?</router-link></li>
			</ul>
		</div>
	</nav>
</template>

<script>
	export default {
		name: "NavbarComponent"
	}
</script>

<style scoped>
.nav-wrapper{
	width: 90%;
	margin: auto;
}
</style>
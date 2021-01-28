<template>
	<div class="panel">
		<div class="panel-heading">
			<a href="">{{ reply.user.name }}</a> said {{ reply.created_at }}...
		</div>

		<div class="panel-body">
			{{ reply.body }}
		</div>
	</div>
</template>

<script>
	export default {
		props: ['reply'],
	}
</script>


document.addEventListener("DOMContentLoaded", () => {
	document.querySelector("#ajax_call").addEventListener("click", () => {
		const formData = new FormData();
		formData.append("action", "request_2_recipes");

		fetch(cookinfamily_homepage_js.ajax_url, {
			method: "POST",
			body: formData
		})
			.then(response => {
				if (!response.ok) {
					throw new Error("Network response error.");
				}

				return response.json();
			})
			.then(data => {
				data.posts.forEach(post => {
					document
						.querySelector("#ajax_return")
						.insertAdjacentHTML("beforeend", "<div>" + post.post_title + "</div>");
				});
			})
			.catch(error => {
				console.error("There was a problem with the fetch operation: ", error);
			});
	});
});

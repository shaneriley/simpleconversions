$(document).ready(function()
{
	$("form:gt(0)").hide();
	$("ul a").click(function()
	{
		$("ul a.active").removeClass();
		$("form").hide();
		$("form:eq(" + $("a", "ul").index(this) + ")").show();
		$(this).addClass("active");
		return false;
	});
	$("form").submit(function()
	{
		form = $(this);
		$("fieldset p", form).remove();
		$("fieldset", form).append('<p>Calculating...<strong> </strong></p>');
		formNum = parseInt($("form", document.body).index(this)) + 1;
		variables = "from=" + $("select[name='from']", form).val() +
				"&to=" +  $("select[name='to']", form).val() +
				"&amount=" + $("input[name='amount']", form).val() +
				"&form=" + formNum;
		$("fieldset", form).animate({opacity: 1.0}, 500, function()
		{
			$.ajax(
			{
				type: "POST",
				url: "calculator.php",
				data: variables,
				success: function(result)
				{
					$("fieldset p", form).html(result);
				},
				complete: function()
				{
					$("strong", form).data("val", parseFloat($("strong", form).text()));
					$("p a", form).bind("click", function()
					{
						x = parseInt($("input", $(this).parent()).val());
						if (isNaN(x))
						{
							x = 0;
						}
						val = Math.round(parseFloat($("strong", $(this).parent()).data("val")) * Math.pow(10,x)) / Math.pow(10,x);
						$("strong", $(this).parent()).text(val);
						return false;
					});
				}
			});
		});
		return false;
	});
	$("#color-switcher a").click(function()
	{
		$("link:eq(1)").attr("href", "./stylesheets/" + $(this).attr("href"));
		return false;
	}).hover(function()
	{
		$("span", $(this)).stop().animate(
		{
			width: "28px",
			height: "15px"
		}, 500);
	}, function()
	{
		$("span", $(this)).stop().animate(
		{
			width: "14px",
			height: "4px"
		}, 500);
	});
});
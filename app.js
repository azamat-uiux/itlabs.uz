const form = document.getElementById("form")
form.addEventListener("submit", e => {
	e.preventDefault()

	const firstname = document.getElementById("firstname").value
	const lastname = document.getElementById("lastname").value
	const phone = document.getElementById("phone").value
	const email = document.getElementById("email").value
	const comment = document.getElementById("comment").value
	const select = document.getElementById("select").value


	const my_text = `Result is:%0A - Ism: ${firstname} %0A - Familya: ${lastname} %0A - Telefon: ${phone} %0A - Email: ${email} %0A - Izoh: ${comment} %0A - Kurs nomi: ${select}`

	const token = "5011210332:AAGVwqBLsNqvq2h0AtpXeRCAukC8Cgy2MBg"
	const chat_id ="-607603440"
	const url = `https://api.telegram.org/bot${token}/sendMessage?chat_id=${chat_id}&text=${my_text}`

	console.log(firstname, lastname, phone, email, comment, select);

	let api = new XMLHttpRequest()

	api.open("GET", url, true)
	api.send()

	console.log("Xabar Jonatildi");
})
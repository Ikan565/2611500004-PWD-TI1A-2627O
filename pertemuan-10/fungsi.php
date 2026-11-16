<?php
Function bersihkan($teks)
{
	return htmlspecialchars($teks ?? "", ENT_QUOTES, "UTF-8");
}
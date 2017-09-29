<?php
class Form {
	private $action;
	private $nom;
	private $prenom;
	public function create($action){
		return '<form action='.$action.' method=GET>';
		}
		public function text($Nom,$nom){
			return '
				<label>'.$Nom.':</label>
				<input type="text" placeholder="Name" name='.$nom.'></br>';
		}
	public function text2($Prenom,$prenom){
			return '
				<label>'.$Prenom.':</label>
				<input type="text" placeholder="Last name" name='.$prenom.'></br><hr>';
		}
	public function submit($Modifier){
			return '<button type="submit">'.$Modifier.'</button></br>';
		}
	public function select($select){
			return '
				<label>'.$select.':
						<select>
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="opel">Opel</option>
								<option value="audi">Audi</option>
						</select></br><hr>';
			}
	public function textA($TextA){
				return '<textarea placeholder='.$TextA.' cols="28" rows="5"></textarea><br><hr>';
			}
	public function buttonR ($genre1,$genre2){
				return '<input type="radio" name='.$genre1.' value='.$genre1.'>'.$genre1.'<br>
							<input type="radio" name='.$genre2.' value='.$genre2.'>'.$genre2.'
						<hr>';
			}
	public function checkBox($valeur){
				return '<input type="checkbox">'.$valeur.'<hr>';
			}
	public function end(){
			return '</form>';
		}
	}
		$form = new Form();
		echo $form->create('index.php');
		echo $form->text('Nom', 'nom');
		echo $form->text2('Prenom','prenom');
		echo $form->select('select');
		echo $form->textA('TextA');
		echo $form->buttonR('male','femme');
		echo $form->checkBox('Exe. checkbox');
		echo $form->submit('Modifier');
		echo $form->end();
	?>
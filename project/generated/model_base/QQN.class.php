<?php
	class QQN {
		/**
		 * @return QQNodeAlternativa
		 */
		static public function Alternativa() {
			return new QQNodeAlternativa('alternativa', null, null);
		}
		/**
		 * @return QQNodeAlumno
		 */
		static public function Alumno() {
			return new QQNodeAlumno('alumno', null, null);
		}
		/**
		 * @return QQNodeCurso
		 */
		static public function Curso() {
			return new QQNodeCurso('curso', null, null);
		}
		/**
		 * @return QQNodeCursoDocente
		 */
		static public function CursoDocente() {
			return new QQNodeCursoDocente('curso_docente', null, null);
		}
		/**
		 * @return QQNodeDocente
		 */
		static public function Docente() {
			return new QQNodeDocente('docente', null, null);
		}
		/**
		 * @return QQNodeExamen
		 */
		static public function Examen() {
			return new QQNodeExamen('examen', null, null);
		}
		/**
		 * @return QQNodeGrado
		 */
		static public function Grado() {
			return new QQNodeGrado('grado', null, null);
		}
		/**
		 * @return QQNodeListaCurso
		 */
		static public function ListaCurso() {
			return new QQNodeListaCurso('lista_curso', null, null);
		}
		/**
		 * @return QQNodeNivel
		 */
		static public function Nivel() {
			return new QQNodeNivel('nivel', null, null);
		}
		/**
		 * @return QQNodePregunta
		 */
		static public function Pregunta() {
			return new QQNodePregunta('pregunta', null, null);
		}
		/**
		 * @return QQNodeRandom
		 */
		static public function Random() {
			return new QQNodeRandom('random', null, null);
		}
		/**
		 * @return QQNodeSeccion
		 */
		static public function Seccion() {
			return new QQNodeSeccion('seccion', null, null);
		}
		/**
		 * @return QQNodeUsuario
		 */
		static public function Usuario() {
			return new QQNodeUsuario('usuario', null, null);
		}
	}
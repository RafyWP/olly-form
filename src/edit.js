import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @return {Element} Element to render.
 */
export default function Edit() {
	return (
		<p { ...useBlockProps() }>
			{ __( 'Olly Form', 'olly-form' ) }
		</p>
	);
}

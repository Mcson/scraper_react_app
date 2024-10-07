import { React } from "react";
import { Modal, ModalContent, ModalHeader, ModalBody, ModalFooter } from "@nextui-org/react";

export default function ModalNextUi({isOpen, onOpenChange, modalTitle, children, footerContent, modalId = "reusable-modal", ...props}){
    return (
        <Modal isOpen={isOpen} onOpenChange={onOpenChange} placement="top" aria-labelledby={`${modalId}-title`} {...props}>
            <ModalContent>
                {(onClose) => (
                    <>
                        <ModalHeader id={`${modalId}-title`}>
                            {modalTitle}
                        </ModalHeader>
                        <ModalBody>
                            {children}
                        </ModalBody>
                        {footerContent && (
                            <ModalFooter>
                                {footerContent}
                            </ModalFooter>
                        )}
                    </>
                )}
            </ModalContent>
        </Modal>
    )
}